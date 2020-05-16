@extends('layout_admin')
@section('title','DMC_Consulting')
@section('content')


 <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">Configuration</div>
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center title-2">Configuration du site</h3>
                                        </div>
                                        <hr>
                                        <form action="{{route('ConfigUpdate')}}" method="patch" >
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1">Nom du site</label>
                                                        <input id="nomSite" name="nomSite" type="text" class="form-control cc-exp">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <label for="x_card_code" class="control-label mb-1">Téléphone</label>
                                                    <div class="input-group">
                                                        <input id="numéro" name="numéro" type="tel" class="form-control cc-cvc" >
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <label for="x_card_code" class="control-label mb-1">Email</label>
                                                    <div class="input-group">
                                                        <input id="x_card_code" name="x_card_code" type="Email" class="form-control cc-cvc" value="" data-val="true" data-val-required="Please enter the security code"
                                                            data-val-cc-cvc="Please enter a valid security code" autocomplete="off">

                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <label for="x_card_code" class="control-label mb-1">Lien de la semaine</label>
                                                    <div class="input-group">
                                                        <input id="x_card_code" name="x_card_code" type="tel" class="form-control cc-cvc" value="" data-val="true" data-val-required="Please enter the security code"
                                                            data-val-cc-cvc="Please enter a valid security code" autocomplete="off">

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1">Horaires</label>
                                                        <input id="horaire" name="horaire" type="tel" class="form-control cc-exp">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <label for="x_card_code" class="control-label mb-1">Facebook</label>
                                                    <div class="input-group">
                                                        <input id="linkFace" name="linkFace" type="tel" class="form-control cc-cvc">
                                                    </div>
                                                </div>
                                            </div>
                                             <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1">Youtube</label>
                                                        <input id="linkYout" name="linkYout" type="tel" class="form-control cc-exp">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <label for="x_card_code" class="control-label mb-1">Twitter</label>
                                                    <div class="input-group">
                                                        <input id="linkTwit" name="linkTwit" type="tel" class="form-control cc-cvc">

                                                    </div>
                                                </div>
                                            </div>
                                             <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1">Linkedin</label>
                                                        <input id="linkLinke" name="linkLinke" type="tel" class="form-control cc-exp">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <label for="x_card_code" class="control-label mb-1">Adresse</label>
                                                    <div class="input-group">
                                                        <input id="x_card_code" name="x_card_code" type="tel" class="form-control cc-cvc" value="" data-val="true" data-val-required="Please enter the security code"
                                                            data-val-cc-cvc="Please enter a valid security code" autocomplete="off">
                                                    </div>
                                                </div>
                                                <div class="col-12 mb-4">
                                                    <label for="x_card_code" class="control-label mb-1">Description du site</label>
                                                    <div class="input-group">
                                                         <textarea name="textarea-input" id="textarea-input" rows="9"  class="form-control"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                                    <i class="fa fa-save fa-lg"></i>&nbsp;
                                                    <span id="payment-button-amount">Enregistrer</span>
                                                    <span id="payment-button-sending" style="display:none;">Sending…</span>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection