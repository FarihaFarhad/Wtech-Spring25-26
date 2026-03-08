console.log("Connected");


function collet_data()
{
    let isnamevalid= collect_firstname();
    let isnameValid = collect_lastname();
    let isemailValid = collect_email();
    let ispNumberValid = collect_pNumber();
    let iscommentValid =collect_comment();
}

function collect_firstname()
{
    let firstname = document.getElementById("FirstName").value;
    console.log(firstname);
    if(firstname =="")
    {
        document.getElementById("NameError").innerHTML=" First Name Can not be Empty";
        return false;
    }
    else{

    }
    return false;

}

function collect_lastname()
{
    let lastname = document.getElementById("LaststName").value;
    console.log(lastname);
    if(lastname =="")
    {
        document.getElementById("NameError").innerHTML=" Last Name Can not be Empty";

        return false;
    }
    else{

    }
    return false;
    
}

function collect_email()
{
    let email = document.getElementById("Email").value;
    console.log(email);
    if(email =="")
    {
        document.getElementById("NameError").innerHTML="Email Can not be Empty";
        return false;
    }
    else{

    }
    return false;
    
}

function collect_pNumber()
{
    let pNumber = document.getElementById("PhoneNumber").value;
    console.log();
    if(firstname =="pNumber")
    {
        document.getElementById("NameError").innerHTML="Phone Number Can not be Empty";
        return false;
    }
    else{

    }
    return false;
    
}
function collect_comment()
{
    let firstname = document.getElementById("Comment").value;
    console.log(comment);
    if(comment =="")
    {
        document.getElementById("NameError").innerHTML="Comment Can not be Empty";
        return false;
    }
    else{

    }
    return false;
    
}

function submit_key()
{
    clickcount++;
    let submitdata = document.getElementById("keysubmit").value;
    document.getElementById("keysubmit").style.color="green";
    document.getElementById("keysubmit").innerHTML="Again Submit" + clickcount;
    return false;
}









