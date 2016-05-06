<?php
/**
 * Status tracker/information for a job.
 *
 * @package     ResqueScheduler
 * @subpackage  ResqueScheduler.Job
 * @author      Wan Qi Chen <kami@kamisama.me>
 * @copyright   Copyright 2013, Wan Qi Chen <kami@kamisama.me>
 * @license     MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
namespace ResqueScheduler\Job;

use PhpResque\Resque\Job\Status as ResqueStatus;

class Status extends ResqueStatus
{
    const STATUS_SCHEDULED = 63;
}
