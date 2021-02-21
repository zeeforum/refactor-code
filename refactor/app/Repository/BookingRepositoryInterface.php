<?php
namespace DTApi\Repository;

use Illuminate\Http\Request;

interface BookingRepositoryInterface {

    public function getUsersJobs($user_id);

    public function getAll(Request $request, $limit = null);

    public function updateJob($id, $data, $cuser);

    public function storeJobEmail($data);

    public function getUsersJobsHistory($user_id, Request $request);

    public function acceptJob($data, $user);

    public function acceptJobWithId($job_id, $cuser);

    public function cancelJobAjax($data, $user);

    public function endJob($post_data);

    public function customerNotCall($post_data);

    public function getPotentialJobs($cuser);

    public function reopen($request);

    public function jobToData($job);
}