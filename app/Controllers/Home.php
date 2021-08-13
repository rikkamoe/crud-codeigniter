<?php

namespace App\Controllers;
use App\Models\CarsModel;

class Home extends BaseController
{
	public function index()
	{
		$cars = new CarsModel();
		$car = $cars->findAll();

		$data = [
			'car' => $car,
		];

		return view('home', $data);
	}

	public function detail($id)
	{
		$cars = new CarsModel();
		$getcar = $cars->where(['id' => $id])->first();
		
		$data = [
			'getcar' => $getcar,
		];

		return view('detail', $data);

	}

	public function create()
	{
		session();
		$data = [
			'validation' => \Config\Services::validation()
		];
		return view('create', $data);
	} 

	public function save()
	{
		if(!$this->validate([
			'name' => 'required',
			'description' => 'required',
			'price' => 'required',
			'image' => 'uploaded[image]|max_size[image,2048]|is_image[image]|mime_in[image,image/jpg,image/jpeg,image/png]',
		]))
		{
			$validation = \Config\Services::validation();
			return redirect()->to('/home/create')->withInput()->with('validation', $validation);
		}

		$fileImage = $this->request->getFile('image');
		$nameImage = $fileImage->getRandomName();
		$fileImage->move('img/product', $nameImage);
		

		$cars = new CarsModel();
		$cars->save([
			'name_car' => $this->request->getVar('name'),
			'description_car' => $this->request->getVar('description'),
			'price_car' => $this->request->getVar('price'),
			'type_car' => $this->request->getVar('type'),
			'img_car' => $nameImage
		]);

		return redirect()->to('/');
	}

	public function delete($id)
	{
		$cars = new CarsModel();
		
		$getcar = $cars->find($id);
		unlink('img/product/'.$getcar['img_car']);

		$cars->delete($id);

		return redirect()->to('/');
	}

	public function edit($id)
	{
		session();
		$cars = new CarsModel();
		$getcar = $cars->where(['id' => $id])->first();
		$data = [
			'validation' => \Config\Services::validation(),
			'getcar' => $getcar
		];
		return view('edit', $data);
	}

	public function update($id)
	{
		if(!$this->validate([
			'name' => 'required',
			'description' => 'required',
			'price' => 'required',
			'image' => 'uploaded[image]|max_size[image,2048]|is_image[image]|mime_in[image,image/jpg,image/jpeg,image/png]',
		]))
		{
			$validation = \Config\Services::validation();
			return redirect()->to('/home/edit/'.$id)->withInput()->with('validation', $validation);
		}

		$fileImage = $this->request->getFile('image');
		
		$nameImage = $fileImage->getRandomName();
		$fileImage->move('img/product', $nameImage);
		unlink('img/product/'.$this->request->getVar('oldImage'));
		

		$cars = new CarsModel();
		$cars->save([
			'id' => $id,
			'name_car' => $this->request->getVar('name'),
			'description_car' => $this->request->getVar('description'),
			'price_car' => $this->request->getVar('price'),
			'type_car' => $this->request->getVar('type'),
			'img_car' => $nameImage
		]);

		return redirect()->to('/');
	}

}
