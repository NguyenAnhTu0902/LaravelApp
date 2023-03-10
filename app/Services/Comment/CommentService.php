<?php

namespace App\Services\Comment;

use App\Repositories\Comment\CommentRepositoryInterface;
use App\Services\BaseService;
use App\Services\ServiceInterface;

class CommentService extends BaseService implements CommentServiceInterface
{
    public $repository;

    public function __construct(CommentRepositoryInterface $commentRepository)
    {
        $this->repository = $commentRepository;
    }
}
