<form method="post">
    @csrf
    {!! formTextarea('description', 'Description', true, null, [], PARSE_BB_INFO) !!}
    {!! formRadios('members_only', 'Members only?', [1 => 'Yes', 0 => 'No'], 0) !!}
    {!! formRadios('priority', 'Priority', PRIORITIES, MAX_PRIO) !!}
    {!! formSubmit('Create') !!}
</form>
