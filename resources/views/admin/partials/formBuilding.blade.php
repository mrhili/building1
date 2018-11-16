
<h1 style="text-center">إضافة قطعة جديدة</h1>

{{ csrf_field() }}


{!! Form::hidden('from', $from) !!}

{!! Form::hidden('imagesArrayHolder' , '' , ['id' => 'imagesArrayHolder']) !!}



<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
    

    
    {!! Form::label('name', 'إسم القطعة الميكانيكية', ['class' => 'col-md-4 control-label', 'placeholder' => 'إسم القطعة الميكانيكية']) !!}
    <div class="col-md-6">
        {!! Form::text('name', old('name'), ['class' => 'form-control', 'required' => true, 'placeholder' => 'إسم القطعة الميكانيكية', 'autofocus' => true ]) !!}

        @if ($errors->has('name'))
            <span class="help-block">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('price') ? ' has-error' : '' }}">
    

    
    {!! Form::label('price', 'ثمن القطعة الميكانيكية', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::number('price', old('price'), ['class' => 'form-control', 'required' => true ,  'step' => 'any']) !!}

        @if ($errors->has('price'))
            <span class="help-block">
                <strong>{{ $errors->first('price') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('state') ? ' has-error' : '' }}">
    

    
    {!! Form::label('state', 'حالة العقار', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
    {!! Form::select('state', buildingState( -1 ) , old('state') , ['class' => 'form-control select2R', 'placeholder' => 'حالة العقار', 'required' => true] ) !!}

        @if ($errors->has('state'))
            <span class="help-block">
                <strong>{{ $errors->first('state') }}</strong>
            </span>
        @endif
    </div>
</div>


<div class="form-group{{ $errors->has('rent') ? ' has-error' : '' }}">
    

    
    {!! Form::label('rent', 'حالة العقار', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
    {!! Form::select('rent', buildingRent( -1 ) , old('rent') , ['class' => 'form-control select2R', 'placeholder' => 'حالة العقار', 'required' => true] ) !!}

        @if ($errors->has('rent'))
            <span class="help-block">
                <strong>{{ $errors->first('rent') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('square') ? ' has-error' : '' }}">
    

    
    {!! Form::label('square', 'مساحة العقار', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
    {!! Form::number('square', old('square') , ['class' => 'form-control', 'placeholder' => 'مساحة العقار', 'required' => true] ) !!}

        @if ($errors->has('rent'))
            <span class="help-block">
                <strong>{{ $errors->first('square') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('type') ? ' has-error' : '' }}">
    

    
    {!! Form::label('type', 'نوع العقار', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
    {!! Form::select('type', buildingtype( -1 ) , old('type') , ['class' => 'form-control select2R', 'placeholder' => 'نوع العقار', 'required' => true] ) !!}

        @if ($errors->has('type'))
            <span class="help-block">
                <strong>{{ $errors->first('type') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('roomNumber') ? ' has-error' : '' }}">
    

    
    {!! Form::label('roomNumber', 'عدد الغرف', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('roomNumber', old('roomNumber'), ['class' => 'form-control', 'placeholder' => 'عدد الغرف']) !!}

        @if ($errors->has('roomNumber'))
            <span class="help-block">
                <strong>{{ $errors->first('roomNumber') }}</strong>
            </span>
        @endif
    </div>
</div>



<div class="form-group{{ $errors->has('lang') ? ' has-error' : '' }}">
    

    
    {!! Form::label('lang', 'خط الطول', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::number('lang', old('lang'), ['class' => 'form-control', 'step' => 'any']) !!}

        @if ($errors->has('lang'))
            <span class="help-block">
                <strong>{{ $errors->first('lang') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('lat') ? ' has-error' : '' }}">
    

    
    {!! Form::label('lat', 'خط العرض', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::number('lat', old('lat'), ['class' => 'form-control', 'step' => 'any']) !!}

        @if ($errors->has('lat'))
            <span class="help-block">
                <strong>{{ $errors->first('lat') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('largDisc') ? ' has-error' : '' }}">
    

    
    {!! Form::label('largDisc', 'عن العقار', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::textarea('largDisc', old('largDisc'), ['class' => 'form-control', 'placeholder' => 'عن العقار', 'required' => true]) !!}

        @if ($errors->has('largDisc'))
            <span class="help-block">
                <strong>{{ $errors->first('largDisc') }}</strong>
            </span>
        @endif
    </div>
</div>


<div class="form-group{{ $errors->has('kind') ? ' has-error' : '' }}">
    

    
    {!! Form::label('kind', ' تقديم أو طلب ', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
    {!! Form::select('kind', buildingKind( -1 ) , old('kind') , ['class' => 'form-control select2R', 'placeholder' => ' تقديم أو طلب ', 'required' => true] ) !!}

        @if ($errors->has('kind'))
            <span class="help-block">
                <strong>{{ $errors->first('kind') }}</strong>
            </span>
        @endif
    </div>
</div>






    
@if( Route::currentRouteName() == 'buildings.edit' || Route::currentRouteName() == 'user.update-buildings-in-wait' )



    <?php
    
    $area_id_Selected = getSelectedItemInArea( $idHelper );
    
    ?>

@endif










<div  id="area_idSide" class="form-group{{ $errors->has('area_id') ? ' has-error' : '' }}">
    

    
    {!! Form::label('area_id', 'مكان تواجد القطعة', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">

        @if ($errors->has('area_id'))

        <?php $car_id_Selected =  old('area_id') ?>
        
            <span class="help-block">
                <strong>{{ $errors->first('area_id') }}</strong>
            </span>
        @endif

        {!! 
        \App\Area::attr(['name' => 'area_id', 'id' => 'area_id', 'class' => 'form-control select2R', 'style' => 'width: 100%', 'placeholder' => 'مكان تواجد القطعة'])
        ->selected( $area_id_Selected )
        ->renderAsDropdown() 
        !!}

    </div>
    
</div>

<a id="addIfNotArea" class="text-center">إضغط هنا إن لم تجد مكان تواجدك في القائمة</a>
<div id="ifNotAreaSide" class="form-group{{ $errors->has('ifNotArea') ? ' has-error' : '' }}">
    

    
    {!! Form::label('ifNotArea', 'مكان تواجد القطعة', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">

        {!! Form::text('ifNotArea', null, ['class' => 'form-control', 'placeholder' => 'المكان', 'id' => 'ifNotArea' ]) !!}

        @if ($errors->has('ifNotArea'))
            <span class="help-block">
                <strong>{{ $errors->first('ifNotArea') }}</strong>
            </span>
        @endif
    </div>

    <a id="returnIfArea" class="text-center">رجوع</a>
    
</div>










<div class="form-group{{ $errors->has('tag_list') ? ' has-error' : '' }}">
    

    
    {!! Form::label('tag_list', 'كلمات دلالية', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::select('tag_list[]', $allTags, null, ['id' => 'tag_list', 'class' => 'form-control','multiple' => 'multiple']) !!}

        @if ($errors->has('tags'))
            <span class="help-block">
                <strong>{{ $errors->first('tags') }}</strong>
            </span>
        @endif
    </div>
</div>




<div class="form-group{{ $errors->has('tel') ? ' has-error' : '' }}">
    {!! Form::label('tel', ' رقم الهاتف', ['class' => 'col-md-4 control-label']) !!}


    <div class="col-md-6">

    <?Php $var4daRightTelNum = "";  if( old('tel') ){ $var4daRightTelNum =  old('tel'); }else{ if( Auth::check() ){ $var4daRightTelNum = Auth::user()->tel; } } ?>

        {!! Form::tel('tel', $var4daRightTelNum , ['class' => 'form-control', 'required' => true]) !!}
        @if ($errors->has('tel'))
            <span class="help-block">
                <strong>{{ $errors->first('tel') }}</strong>
            </span>
        @endif
    </div>

</div>



@unless( $from == 'website' )
<div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
    

    
    {!! Form::label('status', 'تفعيل', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
    {!! Form::select('status', thingStatu( -1 ) , old('status') , ['class' => 'form-control select2R', 'required' => true] ) !!}

        @if ($errors->has('status'))
            <span class="help-block">
                <strong>{{ $errors->first('status') }}</strong>
            </span>
        @endif
    </div>
</div>

@endunless










<div class="form-group">
    <div class="col-md-6 col-md-offset-4">
        {!! Form::submit( $button , ['class' => 'btn btn-primary btn-block']) !!}

    </div>
</div>