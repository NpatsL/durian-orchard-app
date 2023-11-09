<?php

namespace App\Http\Resources;

use App\Models\LotMaterial;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Log;

class MaterialResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $lots = LotMaterial::where('id',$this->lot_material_id)->get('date')[0];
        return ['id' => $this->id,
        'name' => $this->name,
        'qty' => $this->qty,
        'unit' => $this->unit,
        'lot_material_id' => $this->lot_material_id,
        'time' => $lots,
    ];
    }
}
