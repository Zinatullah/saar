
$('#form').validate({ // initialize the plugin
    rules: {
        vacancy_code: {
            required: true,
        },
        email: {
            required: true,
            email: true
        },
        name: {
            required: true,
            minlength: 3
        },
        f_name: {
            required: true,
            minlength: 3

        },
        gf_name: {
            required: true,
            minlength: 3
        },
        yob: {
            required: true
        },
        mobile_no: {
            required: true,
            digits: true,
            // regexp: /^07\d{8}$/
        },
        gender: {
            required: true
        },
        total_exp_years: {
            required: true
        },
        total_exp_months: {
            required: true
        },
        total_related_exp_years: {
            required: true
        },
        total_related_exp_months: {
            required: true
        },
        university: {
            required: true
        },
        faculty: {
            required: true
        },
        department: {
            required: true
        },
        edu_start_date: {
            required: true
        },
        edu_end_date: {
            required: true
        },
        grade: {
            required: true
        },
        tazkira_no: {
            required: true
        },
        permanent_province: {
            required: true
        },
        permanent_district: {
            required: true
        },
        current_province: {
            required: true
        },
        current_district: {
            required: true
        },
        "exp_location[]": {
            required: true
        },
        "exp_title[]": {
            required: true
        },
        "exp_start_date[]": {
            required: true
        },
        "exp_end_date[]": {
            required: true
        },
        image: {
            required: true,
            extension: "jpeg|png|jpg",
            filesize:1024
        },
        tazkira_file: {
            required: true,
            extension: "jpg|jpeg|png|pdf",
            filesize:1024
        },
        education_file: {
            required: true,
            extension: "jpg|jpeg|png|pdf",
            filesize:5120
        },
        khulas_sawanih_file: {
            extension: "jpg|jpeg|png|pdf",
            filesize:1024
        },
        contract_letter_file: {
            extension: "jpg|jpeg|png|pdf",
            filesize:5120
        },
    },
    messages: {
        name: "نوم یی اړین",
        email: "ایمل اړین دی",
        vacancy_code: " اړین دی",
        f_name: " اړین دی",
        gf_name: " اړین دی",
        mobile_no: " اړین دی",
        yob: " اړین دی",
        gender: " اړین دی",
        tazkira_no: " اړین دی",
        current_district: " اړین دی",
        current_province: " اړین دی",
        permanent_district: " اړین دی",
        permanent_province: " اړین دی",
        total_exp_months: " اړین دی",
        total_exp_years: " اړین دی",
        total_related_exp_months: " اړین دی",
        total_related_exp_years: " اړین دی",
        edu_end_date: " اړین دی",
        edu_start_date: " اړین دی",
        image: "انځور اړین دی او د انځور فارمټ jpg یا png وی، اویا يی اندازه له  1 mb څخه زیاته نه وي",
        tazkira_file: "د پیژندپاڼې فایل اړین دی، او د فایل اندازه باید له ۱ mb څخه زیاته نه وي.",
        education_file: "د زده کړو سندونه فایل اړین دی، او د فایل اندازه باید له ۵ mb څخه زیاته نه وي.",
        khulas_sawanih_file: "د خلص سوانح فایل اندازه باید له ۱ mb څخه زیاته نه وي.",
        contract_letter_file: "د قراردادونو کاپي فایل اندازه باید له ۵ mb څخه زیاته نه وي.",
        "exp_location[]": " اړین دی",
        "exp_title[]": " اړین دی",
        "exp_start_date[]": " اړین دی",
        "exp_end_date[]": " اړین دی",
        university: " اړین دی",
        faculty: " اړین دی",
        department: " اړین دی",
        grade: " اړین دی",
    }
});