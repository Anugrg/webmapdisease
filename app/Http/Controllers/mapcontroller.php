<?php

namespace App\Http\Controllers;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Marker;

class mapcontroller extends Controller
{
    //

    public function displayMarkers(Request $request)//$dis
    {
         //$marker = new Marker;
         $dis = $request->Disease;

         $markers = Marker::all();
         $markers = Marker::where('disease',"$dis")->get();
         $dom = new \DOMDocument("1.0");
         $node = $dom->createElement("markers");
         $parnode = $dom->appendChild($node);

         foreach ($markers as $mark)
         {



        // $markers = Marker::where('disease','request->Disease' )->get();
         //$marker = Marker::where('disease','$request->disease')->get();


      //  foreach ($markers as $marker)
        //{
        //foreach ($marker as $markers)
        //{
          $node = $dom->createElement("marker");
          $newnode = $parnode->appendChild($node);
          $newnode->setAttribute("id",$mark->id);
          $newnode->setAttribute("country",$mark->country);
          $newnode->setAttribute("disease",$mark->disease);
          $newnode->setAttribute("lat", $mark->lat);
          $newnode->setAttribute("long", $mark->long);

         }
        //}
        //echo $dom->saveXML();
        return response($dom->saveXML())
        ->withHeaders([
            'Content-Type' => 'text/xml'
        ]);


    }
}
