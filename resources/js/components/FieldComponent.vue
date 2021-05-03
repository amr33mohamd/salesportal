<template>
    <draggable class="dragArea" :value="value" @input="updateValue" group="fields">
        <div v-for="(field, index) in value" :key="index" class="row">
            <div class="col-xl-12 col-lg-12 col-12">
                <div v-if="field.type == 'group'" class="card mb-3">
                    <div class="card-header">
                        <font-awesome-icon :icon="field.icon"></font-awesome-icon>
                        {{ field.label }}
                        <span v-if="!field.fields || field.fields.length === 0" @click="removeField(field.id)" class="inline float-end">
                            <font-awesome-icon color="red" icon="trash-alt" size="lg"></font-awesome-icon>
                        </span>
                        <span @click="setCurrentField(field.id)" class="inline float-end mx-2">
                            <font-awesome-icon icon="pencil-alt" size="lg"></font-awesome-icon>
                        </span>
                    </div>
                    <div class="card-body">
                        <field-component v-if="currentIndexArr.length < 1" :current-index-arr="[...currentIndexArr, index]" @set-current-field="setCurrentField" @remove-field="removeField" v-model="field.fields"></field-component>
                        <p class="text-danger" v-else>Nested Groups are not allowed.</p>
                    </div>
                </div>
                <div v-else class="card mb-3">
                    <div class="card-body">
                        <p>
                            <font-awesome-icon :icon="field.icon"></font-awesome-icon>
                            {{ field.label }}
                            <span @click="removeField(field.id)" class="inline float-end">
                                <font-awesome-icon color="red" icon="trash-alt" size="lg"></font-awesome-icon>
                            </span>
                            <span @click="setCurrentField(field.id)" class="inline float-end mx-2">
                                <font-awesome-icon icon="pencil-alt" size="lg"></font-awesome-icon>
                            </span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </draggable>
</template>

<script>
import draggable from 'vuedraggable'

export default {
    props: {
        value: {
            required: true,
            type: Array
        },
        currentIndexArr: {
            required: false,
            type: Array,
            default: function (){
                return [];
            }
        },
    },
    components: {
        draggable
    },
    name: "FieldComponent",
    methods: {
        // removeAt(indexArr) {
        //     console.log("test")
        //     console.log(this.currentIndexArr, indexArr)
        //     this.$emit('remove-at', indexArr);
        // },
        removeField(id) {
            console.log(id)
            this.$emit('remove-field', id);
        },
        setCurrentField(id) {
            this.$emit('set-current-field', id);
        },
        updateValue(value){
            this.$emit('input', value);
        }
    },
}
</script>

<style scoped>
.dragArea {
    min-height: 50px;
}
</style>
