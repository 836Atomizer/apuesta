<div class="modal fade" id="modal-refill" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Mant. de depositos</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/admin/refill{{!empty($refill->id) ? "/".$refill->id : ""}}" method="post">
                @csrf
                @if(!empty($refill->id))
                    @method('PUT')
                @endif
                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-3 col-form-label">N° de transacción:</label>
                    <div class="col-sm-9">
                        <input type="text" name="number" value="{{ $refill->number ?? ''}}" class="form-control style-input-bottom" id="">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-3 col-form-label">Monto:</label>
                    <div class="col-sm-9">
                        <input type="text" name="mount" value="{{ $refill->mount ?? ''}}" class="form-control style-input-bottom" id="">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-3 col-form-label">Metodo de pago:</label>
                    <div class="col-sm-9">
                        <select required name="bank_id" class="form-control">
                            @if($banks)
                                @foreach($banks as $bank)
                                    <option {{isset($refill->bank_id) && $refill->bank_id==$bank->id  ? "selected" : ""}} value="{{ $bank->id }}">{{ $bank->name }}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-3 col-form-label">Medio:</label>
                    <div class="col-sm-9">
                        <select required name="bank_id" class="form-control">
                            @if($canals)
                                @foreach($canals as $canal)
                                    <option {{isset($refill->bank_id) && $refill->bank_id==$canal->id  ? "selected" : ""}} value="{{ $canal->id }}">{{ $canal->name }}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-3 col-form-label">Jugador:</label>
                    <div class="col-sm-9">
                        <select required name="bank_id" class="form-control">
                            @if($players)
                                @foreach($players as $player)
                                    <option {{isset($refill->bank_id) && $refill->bank_id==$player->id  ? "selected" : ""}} value="{{ $player->id }}">{{ $player->first_name." ".$player->last_name }}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-3 col-form-label">Archivo:</label>
                    <div class="col-sm-9">
                        <input type="file" name="description" value="" class="form-control style-input-bottom" id="">
                    </div>
                </div>
                <div class="text-center py-3">
                    <button type="submit" class="btn btn-success btn-sm">
                        Guardar
                        <span class="sr-only">unread messages</span>
                    </button>
                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Cerrar</button>

                </div>
            </form>
            </div>

        </div>
    </div>
</div>
