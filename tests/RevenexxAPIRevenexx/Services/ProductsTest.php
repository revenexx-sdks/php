<?php

namespace RevenexxAPIRevenexx\Services;

use RevenexxAPIRevenexx\Client;
use RevenexxAPIRevenexx\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;

final class ProductsTest extends TestCase {
    private $client;
    private $products;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->products = new Products($this->client);
    }

    public function testMethodProductsList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->products->productsList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsCreate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->products->productsCreate(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsAssetFamiliesList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->products->productsAssetFamiliesList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsAssetFamiliesCreate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->products->productsAssetFamiliesCreate(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsAssetFamiliesDelete(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->products->productsAssetFamiliesDelete(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsAssetFamiliesGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->products->productsAssetFamiliesGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsAssetFamiliesUpdate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->products->productsAssetFamiliesUpdate(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsAssetsList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->products->productsAssetsList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsAssetsCreate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->products->productsAssetsCreate(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsAssetsDelete(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->products->productsAssetsDelete(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsAssetsGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->products->productsAssetsGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsAssetsUpdate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->products->productsAssetsUpdate(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsAssociationTypesList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->products->productsAssociationTypesList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsAssociationTypesCreate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->products->productsAssociationTypesCreate(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsAssociationTypesDelete(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->products->productsAssociationTypesDelete(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsAssociationTypesGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->products->productsAssociationTypesGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsAssociationTypesUpdate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->products->productsAssociationTypesUpdate(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsAttributeGroupsList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->products->productsAttributeGroupsList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsAttributeGroupsCreate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->products->productsAttributeGroupsCreate(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsAttributeGroupsDelete(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->products->productsAttributeGroupsDelete(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsAttributeGroupsGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->products->productsAttributeGroupsGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsAttributeGroupsUpdate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->products->productsAttributeGroupsUpdate(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsAttributeOptionsList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->products->productsAttributeOptionsList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsAttributeOptionsCreate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->products->productsAttributeOptionsCreate(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsAttributeOptionsDelete(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->products->productsAttributeOptionsDelete(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsAttributeOptionsGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->products->productsAttributeOptionsGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsAttributeOptionsUpdate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->products->productsAttributeOptionsUpdate(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsAttributesList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->products->productsAttributesList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsAttributesCreate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->products->productsAttributesCreate(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsAttributesDelete(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->products->productsAttributesDelete(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsAttributesGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->products->productsAttributesGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsAttributesUpdate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->products->productsAttributesUpdate(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsCategoriesList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->products->productsCategoriesList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsCategoriesCreate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->products->productsCategoriesCreate(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsCategoriesDelete(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->products->productsCategoriesDelete(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsCategoriesGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->products->productsCategoriesGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsCategoriesUpdate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->products->productsCategoriesUpdate(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsFamiliesList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->products->productsFamiliesList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsFamiliesCreate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->products->productsFamiliesCreate(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsFamiliesDelete(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->products->productsFamiliesDelete(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsFamiliesGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->products->productsFamiliesGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsFamiliesUpdate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->products->productsFamiliesUpdate(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsFamilyAttributesList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->products->productsFamilyAttributesList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsFamilyAttributesCreate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->products->productsFamilyAttributesCreate(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsFamilyAttributesDelete(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->products->productsFamilyAttributesDelete(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsFamilyAttributesGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->products->productsFamilyAttributesGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsFamilyAttributesUpdate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->products->productsFamilyAttributesUpdate(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsFamilyVariantsList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->products->productsFamilyVariantsList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsFamilyVariantsCreate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->products->productsFamilyVariantsCreate(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsFamilyVariantsDelete(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->products->productsFamilyVariantsDelete(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsFamilyVariantsGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->products->productsFamilyVariantsGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsFamilyVariantsUpdate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->products->productsFamilyVariantsUpdate(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsMeasurementFamiliesList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->products->productsMeasurementFamiliesList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsMeasurementFamiliesCreate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->products->productsMeasurementFamiliesCreate(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsMeasurementFamiliesDelete(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->products->productsMeasurementFamiliesDelete(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsMeasurementFamiliesGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->products->productsMeasurementFamiliesGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsMeasurementFamiliesUpdate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->products->productsMeasurementFamiliesUpdate(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsProductAssociationsList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->products->productsProductAssociationsList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsProductAssociationsCreate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->products->productsProductAssociationsCreate(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsProductAssociationsDelete(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->products->productsProductAssociationsDelete(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsProductAssociationsGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->products->productsProductAssociationsGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsProductAssociationsUpdate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->products->productsProductAssociationsUpdate(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsProductCategoriesList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->products->productsProductCategoriesList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsProductCategoriesCreate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->products->productsProductCategoriesCreate(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsProductCategoriesDelete(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->products->productsProductCategoriesDelete(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsProductCategoriesGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->products->productsProductCategoriesGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsProductCategoriesUpdate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->products->productsProductCategoriesUpdate(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsReferenceEntitiesList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->products->productsReferenceEntitiesList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsReferenceEntitiesCreate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->products->productsReferenceEntitiesCreate(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsReferenceEntitiesDelete(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->products->productsReferenceEntitiesDelete(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsReferenceEntitiesGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->products->productsReferenceEntitiesGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsReferenceEntitiesUpdate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->products->productsReferenceEntitiesUpdate(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsReferenceEntityRecordsList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->products->productsReferenceEntityRecordsList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsReferenceEntityRecordsCreate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->products->productsReferenceEntityRecordsCreate(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsReferenceEntityRecordsDelete(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->products->productsReferenceEntityRecordsDelete(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsReferenceEntityRecordsGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->products->productsReferenceEntityRecordsGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsReferenceEntityRecordsUpdate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->products->productsReferenceEntityRecordsUpdate(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsDelete(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->products->productsDelete(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->products->productsGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsUpdate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->products->productsUpdate(
            ""
        );

        $this->assertSame($data, $response);
    }

}
