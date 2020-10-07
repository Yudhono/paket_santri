<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Datapaket extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id_paket'          => [
					'type'           => 'INT',
					'constraint'     => 11,
					'unsigned'       => TRUE,
					'auto_increment' => TRUE,
			],
			'nama_paket'       => [
					'type'           => 'VARCHAR',
					'constraint'     => 100,
			],
			'tanggal_diterima' => [
					'type'           => 'DATE',
			],
			'id_kategori' => [
				'type'				=> 'INT',
				'constraint'     	=> 11,
				'unsigned'       	=> TRUE,
			],
			'NIS' => [
				'type'				=> 'VARCHAR',
				'constraint'     	=> 100,
			],
			'id_asrama' => [
				'type'				=> 'INT',
				'constraint'     	=> 11,
				'unsigned'       	=> TRUE,
			],
			'pengirim_paket' => [
				'type'				=> 'VARCHAR',
				'constraint'     	=> 100,
			],
			'isi_paket_yg_disita' => [
				'type'				=> 'VARCHAR',
				'constraint'     	=> 200,
			],
			'status_paket'	=> [
				'type'				=> 'VARCHAR',
				'constraint'     	=> 50,
			],
			'created_at' => [
				'type'				=> 'TIMESTAMP',
			],
			'updated_at' => [
				'type'				=> 'TIMESTAMP',
			],
		]);
		$this->forge->addKey('id_paket', TRUE);
		$this->forge->addForeignKey('id_kategori','kategori_paket','id_kategori','CASCADE','CASCADE');
		$this->forge->addForeignKey('NIS','data_santri','NIS','CASCADE','CASCADE');
		$this->forge->addForeignKey('id_asrama','data_asrama','id_asrama','CASCADE','CASCADE');
		$this->forge->createTable('data_paket');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		//
	}
}
