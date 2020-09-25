//access button from id
const btn = document.getElementById('toggle');
// jus variable for db
const database = firebase.database();


//retriving data from Firebase
//In my case get the value == 0 or 1 
database.ref('value').on('value', function(snapshot) {
    //button click event
    btn.addEventListener('click',(e)=>{
        var val = snapshot.val();
        //window.alert(val);
        //checking current Firebase value == 0
        if(val === 0){
            //if value == 0 then change (write on firebase) to 1
            database.ref('/value/').set(1);
        } else {
            database.ref('/value/').set(0);       
        }
    });   
});
