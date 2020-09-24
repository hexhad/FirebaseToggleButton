
const btn = document.getElementById('toggle');
const database = firebase.database();



database.ref('value').on('value', function(snapshot) {
    btn.addEventListener('click',(e)=>{
        var val = snapshot.val();
        //window.alert(val);
        if(val === 0){
            database.ref('/value/').set(1);
        } else {
            database.ref('/value/').set(0);       
        }
    });   
});