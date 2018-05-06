<?php
class FormModel{
    private $email, $namaLengkap, $noTlp, $gender, $Provinsi, $alamat, $foto;
    
    public function __construct(){

    }
    
    public function setData(){
        $this->email = $_POST['email'];
        $this->namaLengkap = $_POST['namaLengkap'];
        $this->noTlp = $_POST['noTlp'];
        $this->gender = $_POST['gender'];
        $this->Provinsi = $_POST['Provinsi'];
        $this->alamat = $_POST['alamat'];
        $uploads_dir = '../assets/image/';
        $name = $_FILES['foto']['name'];
        $target_dir = $uploads_dir . $name;
        if (is_uploaded_file($_FILES['foto']['tmp_name'])){       
    //in case you want to move  the file in uploads directory
           move_uploaded_file($_FILES['foto']['tmp_name'], $target_dir);
           $uploads_dir = '../../assets/image/';
           $name = $_FILES['foto']['name'];
           $foto = $uploads_dir.$name;
       }
       $this->foto = $foto;

       $fakultas = array ("Fakultas Ilmu Komputer","Fakultas Ekonomi dan Bisnis","Fakultas Hukum",
        "Fakultas Ilmu Administrasi","Fakultas Pertanian","Fakultas Peternakan",
        "Fakultas Teknik","Fakultas Kedokteran","Fakultas Kedokteran Hewan",
        "Fakultas Kedokteran Gigi","Fakultas Perikanan dan Ilmu Kelautan",
        "Fakultas Matematika dan Ilmu Pengetahuan Alam","Fakultas Teknologi Pertanian",
        "Fakultas Ilmu Sosial dan Politik","Fakultas Ilmu Budaya");

       $fakarray = rand(0,sizeof($fakultas));
       $this->fakultas = $fakultas[$fakarray];
   }

   public function getData(){
    return array(
        'email'=> $this->email,
        'namaLengkap' => $this->namaLengkap,
        'fakultas' => $this->fakultas,
        'noTlp' => $this->noTlp,
        'gender' => $this->gender,
        'Provinsi' => $this->Provinsi,
        'alamat' => $this->alamat,
        'foto' => $this->foto
    );
}
}

?>