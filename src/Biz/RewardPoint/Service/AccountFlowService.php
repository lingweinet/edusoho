<?php

namespace Biz\RewardPoint\Service;

interface AccountFlowService
{
    public function createAccountFlow($flow);

    public function updateAccountFlow($id, $fields);

    public function deleteAccountFlow($id);

    public function getAccountFlow($id);

    public function searchAccountFlows(array $conditions, $orderBys, $start, $limit);

    public function countAccountFlows(array $conditions);

    public function sumAccountOutFlowByUserId($userId);

    public function sumInflowByUserIdAndWayAndTime($userId, $way, $startTime, $endTime);

    public function sumInflowByUserId($userId);
}
