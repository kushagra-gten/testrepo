
@extends('layout')

@section('content')
	<div class="container">
            <div class="content">
                <div>
				 <?php foreach($people as $persons) : ?>
	              <li><?= $persons ?></li> 
	             <?php endforeach; ?>
			   </div>
            </div>
        </div>
	
@stop