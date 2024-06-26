<?xml version="1.0" encoding="UTF-8"?>
<data>
@foreach($records as $record)
    <record>
        <brand>{{$record->brand}}</brand>
        <color>{{$record->color}}</color>
        <material>{{$record->material}}</material>
        <style>{{$record->style}}</style>
        <price>{{$record->price}}</price>
    </record>
@endforeach
</data>