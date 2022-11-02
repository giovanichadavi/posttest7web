const bawah = document.getElementById('bawah');
bawah.style.color = 'black'

var html = $("html")

        
if (localStorage.getItem("dark-mode") == "true") {
	$(" html").addClass("dark-mode");
}


function myFunction() {
   var element = document.body;
   element.classList.toggle("dark-mode");
}

const button = document.getElementById('btn');
button.addEventListener("click", function showinfo(){
    const x = document.getElementById('info');
    if (x.style.display == 'none'){
        x.style.display = 'block';
    }
    else{
        x.style.display = 'none';
    }
});

alert("Anda Akan Menuju Ke Website Vansboys, Lanjutkan?");

var konfirmasi = confirm("confirm?");
if(konfirmasi==true){
    console.log("Aksi berhasil");
}else{
console.log("Aksi batal");
}
