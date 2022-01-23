<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SubscribeResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'grade' => $this->program->grade->name,
            'subject' => $this->program->subject->name,
            'teacher' => $this->program->teacher->full_name,
            'start_date' => $this->program->start_at->toDayDateTimeString(),
        ];
    }
}
