function saveFormData()
{
    var Form = {
        name: document.getElementById("inputName").value,
        email: document.getElementById("inputEMail").value,
        gender: document.querySelector('input[name = "gender"]:checked').value,
        opinion: document.getElementById("UserOpinion").value,
        favourite: document.getElementById("favGame").value,
        additionalNotes: document.getElementById("uwagi").value,
        check: document.getElementById("checkbox").value
    };
    sessionStorage.setItem("Form", JSON.stringify(Form));
}

function clearFormData()
{
    sessionStorage.clear();
}

function loadFormData()
{
    var Form = sessionStorage.getItem("Form");
    Form = JSON.parse(Form);
    console.log(typeof (Form));
    if (Form == null) {
        return;
    }else{
        if (Form.name != null)
            document.getElementById("inputName").value = Form.name;
        if (Form.email != null)
            document.getElementById("inputEMail").value = Form.email;
        if (Form.gender == "Female")
            document.getElementById("inputGenderFemale").checked = true;
        if (Form.gender == "Male")
            document.getElementById("inputGenderMale").checked = true;
        if (Form.opinion != null)
            document.getElementById("UserOpinion").value = Form.opinion;
        if (Form.favourite != null)
        {
            var objSelect = document.getElementById("favGame");
            setSelectedValue(objSelect, Form.favourite);
        }
        if (Form.additionalNotes != null)
            document.getElementById("uwagi").value = Form.additionalNotes;
        if (Form.check == "Ok")
            document.getElementById("checkbox").checked = true;
    }
}

function setSelectedValue(selectObj, valueToSet) {
    for (var i = 0; i < selectObj.options.length; i++) {
        if (selectObj.options[i].value == valueToSet) {
            selectObj.options[i].selected = true;
            return;
        }
    }
}