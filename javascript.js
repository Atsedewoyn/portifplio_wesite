function validat() {
    var a = document.myform.firstname.value;
    var b = document.myform.lastname.value;
    var d = document.myform.email.value;
    var f = document.myform.psw.value;
    var e = document.myform.psw_repeat.value;
    var g = document.myform.rol.value;
    var h = document.myform.rol.value;
    var i = document.myform.subject.value;
    var corect = /^[A-Za-z]+$/
    if (a == "" || b == "") {
        alert("please enter the  value");
        document.myform.firstname.focus();
        return false;
    } else {
        if (a.match(corect) && b.match(corect))
            return true;
        else {
            alert("only characters arevallowed")
            document.myform.firstname.focus();
            document.myform.lastname.focus();
            return false;
        }
    }

    if (f == "" || e == "") {
        alert("please enter the  value");
        document.myform.psw.focus();
        document.myform.psw_repeat.focus();
        return false;
    } else {
        CheckPassword();
        return true;
    }

    if (d == "") {
        alert("please enter the correct value");

        document.myform.email.focus();

        return false;
    } else {
        validateEmail();
    }
    return true;
}

function clear() {
    document.myform.firstname.value == "";
    document.myform.psw.value == "";
}

function CheckPassword() {
    var Password, ConfPassword, Result;
    Password = document.myform.psw.value;
    ConfPassword = Password = document.myform.psw.value;
    if (Password != ConfPassword)
        alert("Not match");
}

function validateEmail() {
    var emailID = document.aa.em.value;
    atpos = emailID.indexOf("@");
    return (true);
}