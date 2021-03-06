<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class WorkspaceProject extends Model
{
    use HasFactory;
    protected $table = 'workspace_Projects';
    protected $fillable = ['workspaces_id','projects_id'];
    public function workspace()
    {
        return $this->belongsTo(Workspaces::class);
    }
    public function projectInfo()
    {
        return $this->belongsTo(Projects::class,'projects_id');
    }
}
