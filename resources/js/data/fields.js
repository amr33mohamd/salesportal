import { library } from '@fortawesome/fontawesome-svg-core'
import {
    faParagraph,
    faAt,
    faPencilAlt,
    faSortNumericUp,
    faCheck,
    faLayerGroup,
    faCalendar, faClock, faCalendarPlus, faTimes, faPlusCircle, faTrashAlt
} from '@fortawesome/free-solid-svg-icons'
library.add(faParagraph, faAt, faPencilAlt, faSortNumericUp, faCheck, faLayerGroup, faCalendar, faClock, faCalendarPlus, faTimes, faPlusCircle, faTrashAlt)


export const generateRuleData= (name, value= "", extra= "") => ({
    rule: name,
    value,
    extra,
})
export const basicFieldData= {
    label: "label",
    name: "name",
    type: "text",
    icon: "paragraph",
    rules: [],
    extra: {
        grid: 2
    },
}

export const generateFieldData= (data= {}) => {
    let fieldData= {
        ...basicFieldData,
        ...data,
    }

    return fieldData;
}

export const fieldsData= {
    text: {label: "Text Field"},
    email: {label: "Email Field", icon: "at", rules: [generateRuleData("email")]},
    number: {label: "Number Field", icon: "sort-numeric-up", rules: [generateRuleData("number")]},
    select: {label: "Select Field", icon: "check", extra: {options: [], grid: 2}},
    group: {label: "Group Field", icon: "layer-group", fields: [], reject: ["name", "required", "grid"]},
    date: {label: "Date Field", icon: "calendar", rules: [generateRuleData("date_format", "Y-m-d")]},
    time: {label: "Time Field", icon: "clock", rules: [generateRuleData("date_format", "H:i:s")]},
    datetime: {label: "Datetime Field", icon: "calendar-plus", rules: [generateRuleData("date_format", "Y-m-d H:i")]}
};

export default Object.keys(fieldsData).map(key => generateFieldData({...fieldsData[key], type: key}));
