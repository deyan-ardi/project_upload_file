<?
class User extends Controller
{
    public function index()
    {
        $data['id'] = "1";
        $data['judul'] = "Upload File";
        $data['class'] = "active";
        $this->view('us/templates/header', $data);
        $this->view('us/daftar');
        $this->view('us/templates/footer');
    }
    public function proses()
    {
        $eksFotoBoleh = array('png', 'jpg', 'jpeg');

        // Nama
        $namaFoto = $_FILES['up_foto']['name'];

        // Explode
        $foto = explode('.', $namaFoto);

        // Ekstensi
        $eksFoto = strtolower(end($foto));

        // Error
        $errFoto = $_FILES['up_foto']['error'];

        // Ukuran
        $ukuranFoto = $_FILES['up_foto']['size'];

        // Tmp
        $tmpFoto = $_FILES['up_foto']['tmp_name'];

        if (isset($_POST['Submit'])) {
            if ($errFoto === 4) {
                Flasher::setflash('Gagal', 'Ditambahkan, File Belum Di Uploud', 'danger');
                header('Location:' . BASEURL . '/us/daftar');
                exit;
            }
            if (in_array($eksFoto, $eksFotoBoleh) === true) {
                if ($ukuranFoto < 5717430) {
                    // Generate Nama Gambar Baru
                    // $new_Foto = uniqid();
                    // $new_Foto .= '.';
                    // $new_Foto .= $eksFoto;
                    $destination_path = getcwd() . DIRECTORY_SEPARATOR;
                    // Target
                    $target_foto = $destination_path . '/file/foto/' . $namaFoto;
                    if ($this->model('User_model')->uploadFile($namaFoto) > 0) {
                        move_uploaded_file($tmpFoto, $target_foto);
                        Flasher::setflash('Berhasil', 'Ditambahkan', 'success');
                        header('Location:' . BASEURL . '/us/index');
                        exit;
                    } else {
                        Flasher::setflash('Gagal', 'Ditambahkan', 'danger');
                        header('Location:' . BASEURL . '/us/index');
                        exit;
                    }
                }
                if ($ukuranFoto > 5717430) {
                    Flasher::setflash('Gagal', 'Ditambahkan, File Terlalu Besar', 'danger');
                    header('Location:' . BASEURL . '/us/index');
                    exit;
                }
            } else {
                Flasher::setflash('Gagal', 'Ditambahkan, Ekstensi File Tidak Diperbolehkan', 'danger');
                header('Location:' . BASEURL . '/us/index');
                exit;
            }
        }
    }
}