console.log("Connect Html Page");
// var a = ["abc","def"];

// let clickcount =0;

// a.forEach((item, index)=>{
//     console.log("Index: ", index, "Item: ", item );

// })
// a.map((item, index)=>{
//     console.log("Index: ", index, "Item: ", item )
// })




function submit_key()
{
    //clickcount++;
    let id = document.getElementById("StudentId").value;
    console.log(id);
    

    let Password = document.getElementById("Password").value;
    console.log(Password);
    //document.getElementById("Password");
    
    //let submitdata = document.getElementById("keysubmit").value;
    // document.getElementById("keysubmit").style.color="green";
    // document.getElementById("keysubmit").innerHTML="Again Submit" + clickcount;
    return false;
}

