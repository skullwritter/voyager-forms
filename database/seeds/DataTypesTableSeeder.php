<?php

namespace Pvtl\VoyagerForms\Database\Seeds;

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\DataType;

class DataTypesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        $formDataType = DataType::firstOrNew([ 'model_name' => '\Pvtl\VoyagerForms\Form']);

        if (!$formDataType->exists) {
            $formDataType->fill([
                'name' => 'forms',
                'slug' => 'forms',
                'display_name_singular' => 'Form',
                'display_name_plural' => 'Forms',
                'icon' => 'voyager-documentation',
                'controller' => '\Pvtl\VoyagerForms\Http\Controllers\FormController',
                'generate_permissions' => '1',
            ])->save();
        }

        $enquiryDataType = DataType::firstOrNew([ 'model_name' => '\Pvtl\VoyagerForms\Enquiry']);

        if (!$enquiryDataType->exists) {
            $enquiryDataType->fill([
                'name' => 'enquiries',
                'slug' => 'enquiries',
                'display_name_singular' => 'Enquiry',
                'display_name_plural' => 'Enquiries',
                'icon' => 'voyager-mail',
                'controller' => '\Pvtl\VoyagerForms\Http\Controllers\EnquiryController',
                'generate_permissions' => '1',
            ])->save();
        }
    }
}