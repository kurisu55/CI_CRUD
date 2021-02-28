<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *Kelas pada model M_Mahasiswa 
 * 
 *@author Kristovel Adi Sucipto
 *@version 1.0, 25/02/2021
 */
	
	class M_Mahasiswa extends CI_Model {

		/**
		 * @param fungsi untuk proses pengambilan data input
		*/
		public function getDataMahasiswa(){
			$this->db->select('*');
			$this->db->from('data_mahasiswa');
			$query = $this->db->get();
			/**
			 * @return pengambilan data input
			*/
			return $query->result();
		}

		/**
		 * @param fungsi untuk input data mahasiswa
		*/
		public function DataInputMhs($data){
			$this->db->insert('data_mahasiswa',$data);
		}
		
		/**
		 * @param fungsi untuk edit/update data mahasiswa
		*/
		public function DataEditMhs($data, $id){
			$this->db->where('npm', $id);
			$this->db->update('data_mahasiswa', $data);
		}
		
		/**
		 * @param fungsi untuk pengambilan proses data edit/update
		 */
		public function getDataMahasiswaDetail($id){
			$this->db->where('npm', $id);
			$query=	$this->db->get('data_mahasiswa');
			/**
			 * @return pengambilan data edit/update
			*/
			return $query->row();
		}

		/**
		 * @param fungsi untuk delete data mahasiswa
		*/
		public function DataDeleteMhs($id){
			$this->db->where('npm', $id);
			$this->db->delete('data_mahasiswa');
		}
	}