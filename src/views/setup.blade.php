@if(config('custom.PKG_DEV'))
    <?php $import_cron_job_pkg_path = 'packages/abs/import-cron-job-pkg/src/'?>
@else
    <?php $import_cron_job_pkg_path = ''?>
@endif

<script type="text/javascript">
    var import_cron_job_list_template_url = "{{URL::asset($import_cron_job_pkg_path.'public/angular/import-cron-job-pkg/pages/import-cron-job/list.html')}}";
    var import_cron_job_from_template_url = "{{URL::asset($import_cron_job_pkg_path.'public/angular/import-cron-job-pkg/pages/import-cron-job/form.html')}}";
    var import_cron_job_from_data_check = "{{url('import-cron-job-pkg/import-jobs/get-from-data/')}}";
    var import_cron_job_delete = "{{url('import-cron-job-pkg/import-job/delete/')}}";
    var import_cron_job_template_file_url = "{{URL::asset('/public/templates/')}}";
</script>
<script type="text/javascript" src="{{URL::asset($import_cron_job_pkg_path.'public/angular/import-cron-job-pkg/pages/import-cron-job/controller.js')}}"></script>
