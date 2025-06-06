<div class="modal-dialog" role="document">
    <div class="modal-content">

        {!! Form::open(['url' => action([\App\Http\Controllers\InvoiceSchemeController::class, 'update'], [$invoice->id]), 'method' => 'put', 'id' => 'invoice_scheme_add_form' ]) !!}

        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">@lang( 'invoice.edit_invoice' )</h4>
        </div>

        <div class="modal-body">
            <div class="row">
                <div class="option-div-group">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <div class="option-div @if($invoice->scheme_type == 'blank') {{ 'active'}} @endif">
                                <h4>FORMAT: <br>XXXX <i class="fa fa-check-circle pull-right icon"></i></h4>
                                <input type="radio" name="scheme_type" value="blank" @if($invoice->scheme_type == 'blank') {{ 'checked'}} @endif>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <div class="option-div  @if($invoice->scheme_type == 'year') {{ 'active'}} @endif">
                                <h4>FORMAT: <br>{{ date('Y') }}{{config('constants.invoice_scheme_separator')}}XXXX <i class="fa fa-check-circle pull-right icon"></i></h4>
                                <input type="radio" name="scheme_type" value="year" @if($invoice->scheme_type == 'year') {{ 'checked'}} @endif>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>@lang('invoice.preview'):</label>
                        <div id="preview_format">@lang('invoice.not_selected')</div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="form-group">
                        {!! Form::label('name', __( 'invoice.name' ) . ':*') !!}
                        {!! Form::text('name', $invoice->name, ['class' => 'form-control', 'required', 'placeholder' => __( 'invoice.name' ) ]); !!}
                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="form-group">
                    {!! Form::label('invoice_ubicacion_comercial', 'Ubicación comercial:*') !!}
                        <select name="locacion_id" id="locacion_id" class="form-control select2">
                            @foreach($locations as $item)
                            <option value="{{$item->id}}">{{$item->name}}</option>
                            @endforeach
                        </select>                       
                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="form-group">
                        {!! Form::label('invoice_number_type', __( 'invoice.number_type' ) . ':*') !!} @show_tooltip(__('invoice.number_type_tooltip'))
                        {!! Form::select('number_type', $number_types, $invoice->number_type, ['class' => 'form-control select2', 'id' => 'invoice_number_type']); !!}
                    </div>
                </div>


                <div id="invoice_format_settings">
                    <div class="col-sm-6">
                        <div class="form-group">
                            {!! Form::label('prefix', __( 'invoice.prefix' ) . ':') !!}
                            <div class="input-group col-md-12 col-sm-12">
                                <span class="input-group-addon">
                                    <i class="fa fa-info"></i>
                                </span>
                                {!! Form::text('prefix', $invoice->prefix, ['class' => 'form-control', 'placeholder' => '']); !!}
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 sequential_field @if($invoice->number_type == 'random') hide @endif">
                        <div class="form-group">
                            {!! Form::label('start_number', __( 'invoice.start_number' ) . ':') !!}
                            <div class="input-group col-md-12 col-sm-12">
                                <span class="input-group-addon">
                                    <i class="fa fa-info"></i>
                                </span>
                                {!! Form::number('start_number', $invoice->start_number, ['class' => 'form-control', 'required', 'min' => 0 ]); !!}
                            </div>
                        </div>
                    </div>
                    <div class="clearfix">
                        <div class="col-sm-6">
                            <div class="form-group">
                                {!! Form::label('total_digits', __( 'invoice.total_digits' ) . ':') !!}
                                <div class="input-group col-md-12 col-sm-12">
                                    <span class="input-group-addon">
                                        <i class="fa fa-info"></i>
                                    </span>
                                    {!! Form::select('total_digits', ['4' => '4', '5' => '5', '6' => '6', '7' => '7',
                                    '8' => '8', '9'=>'9', '10' => '10'], $invoice->total_digits, ['class' => 'form-control', 'required']); !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">@lang( 'messages.save' )</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">@lang( 'messages.close' )</button>
            </div>

            {!! Form::close() !!}

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->