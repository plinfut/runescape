<?php

use App\Models\Target;

function createTarget(string $description, bool $members_only, int $priority, string $type = 'General'): Target {
    $target = new Target([
        'description' => $description,
        'type' => $type,
        'members_only_own' => $members_only,
        'members_only_inh' => $members_only,
        'p2p_prio_own' => $priority,
        'f2p_prio_own' => $members_only ? $priority : MAX_PRIO,
        'p2p_prio_inh' => $priority,
        'f2p_prio_inh' => $members_only ? $priority : MAX_PRIO,
        'p2p_usefulness' => MAX_PRIO - $priority,
        'f2p_usefulness' => $members_only ? 0 : MAX_PRIO - $priority,
    ]);
    $target->save();
    return $target;
}
