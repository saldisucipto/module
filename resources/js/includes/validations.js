import {
    Form as VeeForm,
    Field as VeeField,
    defineRule,
    ErrorMessage,
    configure,
} from "vee-validate";
import {
    required,
    min,
    max,
    alpha_spaces as alphaSpace,
    email,
    min_value as minVal,
    max_value as maxVal,
    confirmed,
    not_one_of as excluded,
} from "@vee-validate/rules";

export default {
    install(aplikasi) {
        aplikasi.component("VeeForm", VeeForm);
        aplikasi.component("VeeField", VeeField);
        aplikasi.component("ErrorMessage", ErrorMessage);

        defineRule("required", required);
        // Difine Rules
        defineRule("min", min);
        defineRule("max", max);
        defineRule("alphaSpace", alphaSpace);
        defineRule("email", email);
        defineRule("minVal", minVal);
        defineRule("maxVal", maxVal);
        defineRule("confirmed", confirmed);
        defineRule("excluded", excluded);

        // Custom Message
        configure({
            generateMessage: (ctx) => {
                const messages = {
                    required: `Field ${ctx.field} harus di isi! `,
                    min: `Field ${ctx.field} minimal 6 karakter`,
                };
                const message = messages[ctx.rule.name]
                    ? messages[ctx.rule.name]
                    : `The Field ${ctx.field} is invalid`;
                return message;
            },
            // Validating Triger
            validateOnBlur: true,
            validateOnChange: false,
            validateOnInput: false,
            validateOnModelUpdate: true,
        });
    },
};
