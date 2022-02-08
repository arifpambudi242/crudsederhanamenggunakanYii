<?php

namespace frontend\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class Employee extends Model
{
    public $nip;
    public $nama;
    public $jekel;
    public $tempat_lahir;
    public $tgl_lahir;
    public $telpon;
    public $agama;
    public $alamat;
    public $golongan;
    public $verifyCode;

    public function rules()
    {
        return [
            // name, email, subject and body are required
            [['nip', 'nama', 'jekel', 'tempat_lahir', 'tgl_lahir', 'telpon', 'agama', 'alamat', 'golongan'], 'required'],
            // verifyCode needs to be entered correctly
            ['verifyCode', 'captcha'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'verifyCode'    => 'Kode Verifikasi',
            'nip'           => 'Nomor Induk Pegawai',
            'nama'          => 'Nama Lengkap',
            'jekel'         => 'Jenis Kelamin',
            'tempat_lahir'  => 'Tempat Lahir',
            'tgl_lahir'     => 'Tanggal Lahir',
            'telpon'        => 'Nomor Telepon',
            'agama'         => 'Agama',
            'alamat'        => 'Alamat',
            'golongan'      => 'Golongan'
        ];
    }

    public function daftar()
    {
        if (!$this->validate()) {
            return null;
        }

        $user = new Employee();
        $user->nip          = $this->nip;
        $user->nama         = $this->nama;
        $user->jekel        = $this->jekel;
        $user->tempat_lahir = $this->tempat_lahir;
        $user->tgl_lahir    = $this->tgl_lahir;
        $user->telpon       = $this->telpon;
        $user->agama        = $this->agama;
        $user->alamat       = $this->alamat;
        $user->golongan     = $this->golongan;
        $user->verifyCode   = $this->verifyCode;

        // return $user->save();
    }
}
