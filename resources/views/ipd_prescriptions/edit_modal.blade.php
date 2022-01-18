<div id="editIpdPrescriptionModal" class="modal fade" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h2>{{ __('messages.ipd_patient_prescription.edit_prescription') }}</h2>
                <button type="button" aria-label="Close" class="btn btn-sm btn-icon btn-active-color-primary"
                        data-bs-dismiss="modal">
                    <span class="svg-icon svg-icon-1">
						<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24"
                             version="1.1">
							<g transform="translate(12.000000, 12.000000) rotate(-45.000000) translate(-12.000000, -12.000000) translate(4.000000, 4.000000)"
                               fill="#000000">
								<rect fill="#000000" x="0" y="7" width="16" height="2" rx="1"/>
								<rect fill="#000000" opacity="0.5"
                                      transform="translate(8.000000, 8.000000) rotate(-270.000000) translate(-8.000000, -8.000000)"
                                      x="0" y="7" width="16" height="2" rx="1"/>
							</g>
						</svg>
					</span>
                </button>
            </div>
            {{ Form::open(['id'=>'editIpdPrescriptionForm']) }}
            <div class="modal-body scroll-y mx-5 my-7 model-lg">
                <div class="alert alert-danger display-none hide" id="editValidationErrorsBox"></div>
                {{ Form::hidden('id',null,['id'=>'ipdEditPrescriptionId']) }}
                {{ Form::hidden('ipd_patient_department_id',$ipdPatientDepartment->id, ['id'=>'editIpdPatientDepartmentId']) }}

                <div class="row">
                    <div class="form-group col-sm-12 mb-5">
                        {{ Form::label('header_note', __('messages.ipd_patient_prescription.header_note').':',['class' => 'form-label fs-6 fw-bolder text-gray-700 mb-3']) }}
                        {{ Form::textarea('header_note', null, ['class' => 'form-control form-control-solid', 'id' => 'editHeaderNote', 'rows' => 4]) }}
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-12 overflow-auto">
                        <div class="table-responsive mb-10">
                        <table class="table g-5 gs-0 mb-0 fw-bolder text-gray-700" id="editIpdPrescriptionTbl">
                            <thead class="thead-dark">
                            <tr class="border-bottom fs-7 fw-bolder text-gray-700 text-uppercase">
                                <th class="text-center">#</th>
                                <th class="ipdMedicineCategory">{{ __('messages.ipd_patient_prescription.category_id') }}
                                    <span class="required"></span></th>
                                <th class="ipdMedicineId">{{ __('messages.ipd_patient_prescription.medicine_id') }}</th>
                                <th class="ipdDosage">{{ __('messages.ipd_patient_prescription.dosage') }}<span
                                            class="required"></span></th>
                                <th class="ipdPrescriptionInstruction">{{ __('messages.ipd_patient_prescription.instruction') }}
                                    <span class="required"></span></th>
                                <th class="text-center">
                                    <button type="button" class="btn btn-sm btn-primary w-100"
                                            id="addPrescriptionItemOnEdit"
                                            data-edit="1">{{ __('messages.common.add') }}</button>
                                </th>
                            </tr>
                            </thead>
                            <tbody class="edit-ipd-prescription-item-container"></tbody>
                        </table>
                    </div>
                </div>
                </div>
                <hr class="py-0 my-0 mb-3">
                <div class="row">
                    <div class="form-group col-sm-12 mb-5">
                        {{ Form::label('footer_note', __('messages.ipd_patient_prescription.footer_note').':', ['class' => 'form-label fs-6 fw-bolder text-gray-700 mb-3']) }}
                        {{ Form::textarea('footer_note', null, ['class' => 'form-control form-control-solid', 'id' => 'editFooterNote', 'rows' => 4]) }}
                    </div>
                </div>

                <div class="d-flex mt-5">
                    {{ Form::button(__('messages.common.save'), ['type'=>'submit','class' => 'btn btn-primary me-3','id'=>'btnEditIpdPrescriptionSave','data-loading-text'=>"<span class='spinner-border spinner-border-sm'></span> Processing..."]) }}
                    <button type="button" class="btn btn-light btn-active-light-primary me-2"
                            data-bs-dismiss="modal">{{ __('messages.common.cancel') }}</button>
                </div>
            </div>
            {{ Form::close() }}
        </div>
    </div>
</div>
