<?php

#namespace Doctrine\Tests\Mocks;

#use Doctrine\DBAL\Platforms\AbstractPlatform;

class Doctrine_DatabasePlatformMock extends Doctrine_DBAL_Platforms_AbstractPlatform
{
    private $_prefersIdentityColumns = false;
    
    /**
     * @override
     */
    public function getNativeDeclaration(array $field) {}
    
    /**
     * @override
     */
    public function getPortableDeclaration(array $field) {}
    
    /**
     * @override
     */
    public function prefersIdentityColumns() {
        return $this->_prefersIdentityColumns;
    }

    /** @override */
    public function getIntegerTypeDeclarationSql(array $field) {}

    /** @override */
    public function getBigIntTypeDeclarationSql(array $field) {}

    /** @override */
    public function getTinyIntTypeDeclarationSql(array $field) {}

    /** @override */
    public function getSmallIntTypeDeclarationSql(array $field) {}

    /** @override */
    public function getMediumIntTypeDeclarationSql(array $field) {}

    /** @override */
    protected function _getCommonIntegerTypeDeclarationSql(array $columnDef) {}

    /** @override */
    public function getVarcharDeclarationSql(array $field) {}
    
    /* MOCK API */
    
    public function setPrefersIdentityColumns($bool)
    {
        $this->_prefersIdentityColumns = (bool)$bool;
    }
    
}
