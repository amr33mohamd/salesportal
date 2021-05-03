<template>
    <div class="col-xl-2 col-lg-2 col-12 bg-light" style="position:fixed;right: 0">
        <h6 class="py-3">Field Properties</h6>
        <div v-if="checkAllowReject('label')" class="row">
            <div class="col-xl-12 col-lg-12 col-12">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" v-model="value.label">
                    <label>Field Label</label>
                </div>
            </div>
        </div>
        <div v-if="checkAllowReject('name')" class="row">
            <div class="col-xl-12 col-lg-12 col-12">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" v-model="value.name">
                    <label>Field Name</label>
                </div>
            </div>
        </div>
        <div v-if="checkAllowReject('required')">
            <hr class="my-3" />
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-12">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" :checked="checkRule('required')" @input="toggleRule('required')" id="mandatory">
                        <label class="form-check-label" for="mandatory">
                            Mandatory
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div v-if="value.extra && value.extra.options && checkAllowReject('options')">
            <hr class="my-3" />
            <div>
                <span class="">Options</span>
                <span class="">
                    <button class="btn btn-sm btn-outline-secondary" type="button" @click="addOption"><font-awesome-icon icon="plus-circle"></font-awesome-icon></button>
                </span>
            </div>
            <div class="row my-3">
                <div class="input-group mb-3" v-for="(option, index) in value.extra.options" :key="index">
                    <input type="text" class="form-control" placeholder="" v-model="value.extra.options[index]">
                    <div class="input-group-prepend">
                        <button class="btn btn-outline-secondary" type="button" @click="deleteOption(index)"><font-awesome-icon icon="times"></font-awesome-icon></button>
                    </div>
                </div>
            </div>
        </div>
        <div v-if="checkAllowReject('grid')" class="row">
            <div class="col-xl-12 col-lg-12 col-12">
                <div class="form-floating mb-3">
                    <select class="form-select" aria-label="Grid" v-model="value.extra.grid">
                        <option v-for="index in 11" :key="index+1" :value="index+1">{{index+1}}</option>
                    </select>
                    <!--                    <input type="number" min="2" max="12" class="form-control" v-model="value.extra.grid">-->
                    <label>Grid</label>
                </div>
            </div>
        </div>
        <!--        <h6>Permission</h6>-->
        <!--        <div class="row mt-3">-->
        <!--            <div class="col-xl-12 col-lg-12 col-12">-->
        <!--                <div class="form-floating">-->
        <!--                    <select class="form-select" aria-label="Floating label select example">-->
        <!--                        <option selected>Everyone</option>-->
        <!--                        <option value="1">One</option>-->
        <!--                        <option value="2">Two</option>-->
        <!--                        <option value="3">Three</option>-->
        <!--                    </select>-->
        <!--                    <label>Show field to</label>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        </div>-->
    </div>
</template>

<script>
export default {
    name: "FieldSettingsComponent",
    props: {
        value: {
            type: Object,
            required: true
        }
    },
    watch: {
        value() {
            this.$emit('input', this.value);
        }
    },
    methods: {
        checkAllowReject(option){
            if(this.value.reject && Array.isArray(this.value.reject) && this.value.reject.some(el => option === el))
                return false;

            if(this.value.allow && Array.isArray(this.value.allow) && this.value.allow.some(el => option === el))
                return true;

            return true;
        },
        update(key, value) {
            this.$emit('input', { ...this.value, [key]: value })
        },
        enableRule(rule, value= "", extra= ""){
            let tempRules= [...this.value.rules]
            tempRules.push({
                rule,
                value,
                extra
            })
            this.value.rules= tempRules;
        },
        disableRule(name){
            let rules= this.value.rules.filter(rule => rule.rule !== name);
            this.value.rules= rules;
        },
        checkRule(name){
            return this.value.rules && this.value.rules.some(rule => rule.rule === name)
        },
        toggleRule(name, value= "", extra= ""){
            if(this.checkRule(name)){
                this.disableRule(name)
            }else{
                this.enableRule(name, value, extra)
            }
        },
        deleteOption(key){
            console.log({key})
            let optionsTemp= [...this.value.extra.options];
            optionsTemp.splice(key, 1);
            this.value.extra= {...this.value.extra, options: optionsTemp};
        },
        addOption(){
            console.log({...this.value.extra, options: [...this.value.extra.options, "Option"]})
            this.value.extra= {...this.value.extra, options: [...this.value.extra.options, "Option"]};
        }
    },
}
</script>

<style scoped>

</style>
