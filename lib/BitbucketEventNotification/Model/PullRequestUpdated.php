<?php
namespace BitbucketEventNotification\Model;

/**
 * This class is a model that represents the pull request update hook.
 *
 * @package BitbucketEventNotification\Model
 */
class PullRequestUpdated extends PullRequest
{
    /**
     * {@inheritDoc}
     */
    public function toNotifyString()
    {
        $notify = '';
        $notify .= sprintf("[info]");
        $notify .= sprintf("[title]Pull request has been updated by %s. Please re-review(bow)[/title]", $this->data['author']['display_name']);
        $notify .= sprintf("[%s] %s", $this->data['state'], $this->data['title']);
        $notify .= sprintf("[/info]");
        return $notify;
    }
}