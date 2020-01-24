<div id="client-activity-widget">
    <section class="content">
        <div class="box box-solid">
            <div class="box-header">
                <h3 class="box-title">@lang('ip.recent_client_activity')</h3>
            </div>
            <div class="box-body no-padding">
                <table class="table table-striped">
                    <tbody>
                    <tr>
                        <th>@lang('ip.date')</th>
                        <th>@lang('ip.activity')</th>
                    </tr>
                    @foreach ($recentClientActivity as $activity)
                        <tr>
                            <td>{{ $activity->formatted_created_at }}</td>
                            <td>{!! $activity->formatted_activity !!}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>