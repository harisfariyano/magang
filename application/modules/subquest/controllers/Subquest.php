<?php defined('BASEPATH') or exit('No direct script access allowed');

class Subquest extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->cek_login(1);
    }

    private function meta()
    {
        $data_user = $this->M_Universal->getMulti(NULL, "sub_quest");

        $data = array(
            "judul"         => "Sub Quest",
            "keterangan"    => "Manajemen Sub Questionnaire",
            "halaman"       => "sub_quest",
            "view"          => "sub_quest",
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
        $data["edit"]    = $this->M_Universal->getOne(["id" => dekrip(uri(3))], "sub_quest");

        $this->load->view('template', $data);
    }

    public function tambah()
    {
        $data = array(
            "title"            => $this->input->post("title"),
        );

        $tambah = $this->M_Universal->insert($data, "sub_quest");

        if ($tambah) {
            notifikasi_redirect("success", "Tambah sub questionnaire berhasil", uri(1));
        } else {
            notifikasi_redirect("danger", "Tambah sub questionnaire gagal", uri(1));
        }
    }

    public function update()
    {
        $id         = dekrip($this->input->post("id"));
        $data       = array(
            "title"     => $this->input->post("title"),
            "Sub_ke"    => $this->input->post("Sub_ke")
        );

        $update = $this->M_Universal->update($data, ["id" => $id], "sub_quest");

        if ($update) {
            notifikasi_redirect("success", "Update sub questionnaire berhasil", uri(1));
        } else {
            notifikasi_redirect("danger", "Update sub questionnaire gagal", uri(1));
        }
    }

    public function hapus()
    {
        $hapus = $this->M_Universal->delete(["id" => dekrip(uri(3))], "sub_quest");
        // $hapus = $this->M_Universal->update(array("is_delete" => true), ["id" => dekrip(uri(3))], "sub_quest");

        if ($hapus) {
            notifikasi_redirect("success", "Hapus sub questionnaire berhasil", uri(1));
        } else {
            notifikasi_redirect("danger", "Hapus sub questionnaire gagal", uri(1));
        }
    }
}
