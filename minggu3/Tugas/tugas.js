
function isiSemua() {
    const nama = document.getElementById('nama').value;
    const alamat = document.getElementById('alamat').value;
    const date = document.getElementById('date').value;
    const genderfemale = document.getElementById('cewe').checked;
    const gendermale = document.getElementById('laki').checked;
    const gender =document.getSelection();
    const hobby1 = document.getElementById('hobby1').checked;
    const hobby2 = document.getElementById('hobby2').checked;
    const hobby3 = document.getElementById('hobby3').checked;
    const job1 = document.getElementById('job1').checked;
    const job2 = document.getElementById('job2').checked;
    const job3 = document.getElementById('job3').checked;

    let kosong = [];
    
    const confirmChecked = document.getElementById('confirm').checked;
    if (confirmChecked) {
        if (!nama || !alamat || !date || (!gendermale && !genderfemale) || (!hobby1 && !hobby2 && !hobby3) || (!job1 && !job2 && !job3)) {
            if (!nama) {
                kosong.push("Nama");
            }
            if (!alamat) {
                kosong.push("Alamat");
            }
            if (!date) {
                kosong.push("Tanggal Lahir");
            }
            if (!gendermale && !genderfemale) {
                kosong.push("Jenis Kelamin");
            }
            if (!hobby1 && !hobby2 && !hobby3) {
                kosong.push("Hobby");
            }
            if (!job1 && !job2 && !job3) {
                kosong.push("Pekerjaan");
            }
            alert("Harap isi " + kosong);
        } else {
            alert("Data anda berhasil diinput, thankyouuuu ")
            
        }
    } else {
        alert("Harap centang konfirmasi untuk mengirim data.");
    }
    
    
}