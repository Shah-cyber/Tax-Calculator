<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tax_relief extends Model
{
    protected $table = 'tax_relief';
    protected $primaryKey = 'id';
	public $timestamps = false;
    protected $fillable = ['id', 'year', 'gender', 'government_servant', 'disabled_person', 'marital_status_married', 'marital_status_single', 'have_child_yes', 'noofchildless18', 'noofchildmore18alevel', 'noofchildmore18diploma', 'noofdisabledchild', 'noofdisabledchildmore18diploma', 'sspnchildsaving', 'breastfeedingequipment', 'childcarefees', 'yearlyincome', 'monthlytaxdeduction', 'individualdependentrelatives', 'educationfeeforself', 'children', 'equipmentfordisabledperson', 'dischildcarefees', 'medicalexpenses', 'medicalexpensesparents', 'epf', 'socso', 'lifeinsurance', 'educationmedicalinsurance', 'prs', 'sspn', 'lifestyle', 'lifestyleaddgadget', 'lifestyleaddsports', 'domestictravel', 'donationgift', 'selfrebate', 'zakatfitrah', 'created_at'];
}
