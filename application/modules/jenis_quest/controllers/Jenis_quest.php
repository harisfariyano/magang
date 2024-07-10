<?php defined('BASEPATH') or exit('No direct script access allowed');

class Jenis_quest extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->cek_login(1);
    }

    private function meta()
    {
        $data_user = $this->M_Universal->getMulti(NULL, "jenis_quest");

        $data = array(
            "judul"         => "Jenis Quest",
            "keterangan"    => "Manajemen Jenis Questionnaire",
            "halaman"       => "jenis_quest",
            "view"          => "jenis_quest",
            "data_user"     => $data_user,
        );

        return $data;
    }

    public function index()
    {
        $this->load->view('template', $this->meta());
    }

    public function edit()
    {
        $data            = $this->meta();
        $data["edit"]    = $this->M_Universal->getOne(["id" => dekrip(uri(3))], "jenis_quest");

        $this->load->view('template', $data);
    }

    public function tambah()
    {
        $data = array(
            "title"            => $this->input->post("title"),
        );

        $tambah = $this->M_Universal->insert($data, "jenis_quest");

        if ($tambah) {
            notifikasi_redirect("success", "Tambah jenis questionnaire berhasil", uri(1));
        } else {
            notifikasi_redirect("danger", "Tambah jenis questionnaire gagal", uri(1));
        }
    }

    public function update()
    {
        $id         = dekrip($this->input->post("id"));
        $data       = array(
            "title"     => $this->input->post("title")
        );

        $update = $this->M_Universal->update($data, ["id" => $id], "jenis_quest");

        if ($update) {
            notifikasi_redirect("success", "Update jenis questionnaire berhasil", uri(1));
        } else {
            notifikasi_redirect("danger", "Update jenis questionnaire gagal", uri(1));
        }
    }

    public function hapus()
    {
        $hapus = $this->M_Universal->delete(["id" => dekrip(uri(3))], "jenis_quest");
        // $hapus = $this->M_Universal->update(array("is_delete" => true), ["id" => dekrip(uri(3))], "sub_quest");

        if ($hapus) {
            notifikasi_redirect("success", "Hapus sub questionnaire berhasil", uri(1));
        } else {
            notifikasi_redirect("danger", "Hapus sub questionnaire gagal", uri(1));
        }
    }
}
