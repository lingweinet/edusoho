<?php
namespace Custom\Service\Taxonomy\Dao;

interface TagTeacherDao
{
	public function addTag(array $tag);

	public function updateTag($id, array $fields);

    public function findTagsByIds(array $ids);

    public function findTagsByNames(array $names);

    public function findAllTags($start, $limit);

    public function getTag($id);

    public function getTagByName($name);

    public function getTagByLikeName($name);

    public function findAllTagsCount();

    public function deleteTag($id);
    
    public function findAllTagsByType($start,$limit,$type);
    
    public function getTagCountByType($type);
    

}