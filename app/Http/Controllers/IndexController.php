<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\IndexBanner;
use App\Category;
use App\Gallery;
use App\Facillity;
use App\Type;
use App\Apartament;
use App\IndexApartament;

class IndexController extends Controller
{
    
    
    public function index()
    {
      $indexBanner = IndexBanner::get();
      $tip = Type::get();
      $apartamente = IndexApartament::with('categories')->get();
      foreach($apartamente as $gallery){
        $gallery->scheme = json_decode($gallery->scheme);
      }
      // dd($apartamente);
      return view('index', [
            'indexBanner'=>$indexBanner,
            'apartamente'=>$apartamente,
            'tip'=>$tip,
        ]);
      
      
    }

    public function facilitati()
    {
      $facilitati = Facillity::get();
      return view('facilitati', [
          'facilitati'=>$facilitati,
        ]);
      
    }

    public function despre()
    {
      $facilitati = Facillity::get();
      return view('despre', [
          'facilitati'=>$facilitati,
        ]);
      
    }

    public function tipuri()
    {
      $tipuri = Type::get();
      return view('tipuri', [
        'tipuri'=>$tipuri,

        ]);
      
    }
    public function apartament($url_slug){
      $tip = Type::where('id',$url_slug)->first();
      $apartamente = Apartament::with('categories')->where('id_tip',$url_slug)->get();
      foreach($apartamente as $gallery){
        $gallery->schema = json_decode($gallery->schema);
      }
      // dd($apartamente->schema);


      $category = Apartament::with('categories')->where('id_tip',$url_slug)->first();
      // dd($category->categories);
      return view ('apartament',[
        'tip'=>$tip,
        'apartamente'=>$apartamente,
        'category'=>$category,
      ]);

  }
    public function termeni()
    {
      
      return view('termeni', [
        ]);
      
    }

    public function confidentialitate()
    {

      return view('confidentialitate', [
        ]);
      
    }

    public function cookies()
    {

      return view('cookies', [
        ]);
      
    }
    public function galerie()
    {
      $categorii =Category::select('id','name')->get();
      $gallery = Gallery::get();
      foreach($gallery as &$album){
        $album->images = json_decode($album->images);
      }
      return view('galerie', [
        'categorii'=>$categorii,
        'gallery'=>$gallery,
        ]);
      
      
    }
    
    
}