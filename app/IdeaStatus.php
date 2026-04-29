<?php

namespace App;

enum IdeaStatus: string
{
    case PENDING = 'pending';
    case IN_PROGRESS = 'in_progress';
    case COMPLETED = 'completed';

    public function label(): string
    {
        return match($this) {
            self::PENDING       => 'Idea Pending',
            self::COMPLETED     => 'Idea Completed',
            self::IN_PROGRESS   => 'Idea Completed',
        };
    }
}
