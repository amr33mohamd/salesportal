import Vue from "vue";
import fields, {fieldsData, generateFieldData} from "./data/fields";
require('./bootstrap');
import Toasted from 'vue-toasted';

import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'
import draggable from 'vuedraggable'
import FieldComponent from "./components/FieldComponent";
import FieldSettingsComponent from "./components/FieldSettingsComponent";
require('vue2-animate/dist/vue2-animate.min.css')
// Import component
import Loading from 'vue-loading-overlay';
// Import stylesheet
import 'vue-loading-overlay/dist/vue-loading.css';

Vue.use(Toasted)

Vue.component('font-awesome-icon', FontAwesomeIcon)

// Vue.config.productionTip = false
const vm = new Vue({
    el: '#fieldBuilder',
    components: {
        draggable,
        FieldComponent,
        Loading,
        FieldSettingsComponent
    },
    data: {
        isLoading: false,
        currentFieldId: null,
        mainFields: fields,
        currentFields: [],
        fields: window.fields,
    },
    mounted(){
        this.loadFields(this.fields);
    },
    computed: {
        currentField: {
            // getter
            get: function () {
                return _.findDeep(this.currentFields, (value, key, parent) => value.id === this.currentFieldId, {
                    childrenPath: 'fields',
                    leavesOnly: false
                }).value;
            },
            // setter
            set: function (newValue) {
                let tempFields= _.mapValuesDeep(this.currentFields, (field) => {
                        if(newValue.id === field.id)
                            return newValue;
                        return field;
                    }, {
                        childrenPath: 'fields',
                        leavesOnly: false
                    }
                );
                this.currentFields= tempFields || [];
            }
        }
    },
    methods: {
        loadFields(fields) {
            this.currentFieldId= null
            let tempFields= [];
            let currentGroup= null;
            let currentGroupFields= [];
            fields= fields.map(field => generateFieldData({...fieldsData[field.type], ...field, isOld: true}))
            fields.forEach(field => {
                if(!field.extra)
                    field.extra= {grid: 2};
                if(!field.extra.grid)
                    field.extra= {...field.extra, grid: 2};
                if(!field?.extra?.group){
                    tempFields.push(field)
                }else{
                    if(!currentGroup){
                        currentGroup= field
                    }
                    if(currentGroup && (field.extra.group !== currentGroup?.extra?.group)){
                        tempFields.push({
                            id: new Date().getTime()+currentGroup.extra.group,
                            ...fieldsData.group,
                            type: "group",
                            name: currentGroup.extra.group,
                            label: currentGroup.extra.group,
                            fields: currentGroupFields,
                            position: currentGroup.position,
                        });
                        currentGroup= field;
                        currentGroupFields= [];
                    }
                    currentGroupFields.push(field)
                }
            })
            if(currentGroupFields.length > 0){
                tempFields.push({
                    id: new Date().getTime()+currentGroup.extra.group,
                    ...fieldsData.group,
                    type: "group",
                    name: currentGroup.extra.group,
                    label: currentGroup.extra.group,
                    fields: currentGroupFields,
                    position: currentGroup.position,
                });
            }
            console.log({tempFields})
            console.log({sorted: tempFields.sort((a, b) => a.position - b.position)})
            this.currentFields= tempFields.sort((a, b) => a.position - b.position);

        },
        setCurrentField(id){
            console.log("editing", id)
            this.currentFieldId= id;
        },
        removeField(id){
            console.log("Removing", id)
            if (this.currentFieldId === id)
                this.currentFieldId= null

            let tempArr= _.filterDeep(this.currentFields, (value, key, parent) => value.id !== id, {
                childrenPath: 'fields',
                leavesOnly: false
            });
            this.currentFields= tempArr || [];
        },
        removeAt(ids= []) {
            console.log({ids})

            let removeItem= this.currentFields;
            if(ids.length === 1){
                removeItem.splice(ids[ids.length-1], 1);
            }else{
                for (let i= 0; i < ids.length - 1; i++){
                    removeItem= removeItem[ids[i]];
                }
                removeItem.fields.splice(ids[ids.length-1], 1);
            }
        },
        handleClone (item) {
            // Create a fresh copy of item
            let cloneMe = _.cloneDeep(item);
            cloneMe.id= new Date().getTime()
            return cloneMe;
        },
        async save(){
            this.isLoading= true;
            let clonedData= _.cloneDeep(this.currentFields);

            const finalFields= [];
            _.eachDeep(clonedData, (child, i, parent, ctx) => {
                if(child.type !== "group"){
                    const currentEl= {...child};
                    if(parent && parent.type === "group"){
                        if(currentEl.extra)
                            currentEl.extra.group= parent.label;
                        else {
                            currentEl.extra = {
                                group: parent.label
                            }
                        }
                    }
                    finalFields.push(currentEl);
                }
            },{
                childrenPath: 'fields',
            })
            console.log({finalFields})
            await axios.post("", {
                fields: finalFields
            }).then(res => {
                console.log(res.data.fields)
                this.loadFields(res.data.fields);
                let toast = this.$toasted.show("Saved Successfully.", {
                    theme: "toasted-primary",
                    position: "top-right",
                    duration : 5000
                });
            }).catch(err => {
                console.log(err.response)
                let msg= "Something Went Wrong.";
                if(err.response && err.response.data && err.response.data.msg)
                    msg= err.response.data.msg

                let toast = this.$toasted.show(msg, {
                    theme: "bubble",
                    position: "top-right",
                    duration : 5000
                });
            }).finally(res => {
                this.isLoading= false;
            })
        }
    }
})
