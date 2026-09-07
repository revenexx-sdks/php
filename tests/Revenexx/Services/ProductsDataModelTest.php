<?php

namespace Revenexx\Services;

use Revenexx\Client;
use Revenexx\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;
use Revenexx\Enums\EntityType;
use Revenexx\Enums\Kind;

final class ProductsDataModelTest extends TestCase {
    private $client;
    private $productsDataModel;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->productsDataModel = new ProductsDataModel($this->client);
    }

    public function testMethodProductsAssetFamiliesList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->productsDataModel->productsAssetFamiliesList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsAssetFamiliesCreate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->productsDataModel->productsAssetFamiliesCreate(
            "packshots"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsAssetFamiliesDelete(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->productsDataModel->productsAssetFamiliesDelete(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsAssetFamiliesGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->productsDataModel->productsAssetFamiliesGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsAssetFamiliesUpdate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->productsDataModel->productsAssetFamiliesUpdate(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsAssociationTypesList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->productsDataModel->productsAssociationTypesList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsAssociationTypesCreate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->productsDataModel->productsAssociationTypesCreate(
            "cross_sell"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsAssociationTypesDelete(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->productsDataModel->productsAssociationTypesDelete(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsAssociationTypesGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->productsDataModel->productsAssociationTypesGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsAssociationTypesUpdate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->productsDataModel->productsAssociationTypesUpdate(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsAttributeSchema(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->productsDataModel->productsAttributeSchema(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsAttributeGroupsList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->productsDataModel->productsAttributeGroupsList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsAttributeGroupsCreate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->productsDataModel->productsAttributeGroupsCreate(
            "technical_attributes"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsAttributeGroupsDelete(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->productsDataModel->productsAttributeGroupsDelete(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsAttributeGroupsGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->productsDataModel->productsAttributeGroupsGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsAttributeGroupsUpdate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->productsDataModel->productsAttributeGroupsUpdate(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsAttributeOptionsList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->productsDataModel->productsAttributeOptionsList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsAttributeOptionsCreate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->productsDataModel->productsAttributeOptionsCreate(
            "",
            "stainless_steel"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsAttributeOptionsDelete(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->productsDataModel->productsAttributeOptionsDelete(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsAttributeOptionsGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->productsDataModel->productsAttributeOptionsGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsAttributeOptionsUpdate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->productsDataModel->productsAttributeOptionsUpdate(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsAttributesList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->productsDataModel->productsAttributesList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsAttributesCreate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->productsDataModel->productsAttributesCreate(
            "net_weight",
            "select"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsAttributesDelete(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->productsDataModel->productsAttributesDelete(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsAttributesGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->productsDataModel->productsAttributesGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsAttributesUpdate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->productsDataModel->productsAttributesUpdate(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsFamiliesList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->productsDataModel->productsFamiliesList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsFamiliesCreate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->productsDataModel->productsFamiliesCreate(
            "power_tools"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsFamiliesDelete(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->productsDataModel->productsFamiliesDelete(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsFamiliesGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->productsDataModel->productsFamiliesGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsFamiliesUpdate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->productsDataModel->productsFamiliesUpdate(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsFamilyAttributesList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->productsDataModel->productsFamilyAttributesList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsFamilyAttributesCreate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->productsDataModel->productsFamilyAttributesCreate(
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsFamilyAttributesDelete(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->productsDataModel->productsFamilyAttributesDelete(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsFamilyAttributesGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->productsDataModel->productsFamilyAttributesGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsFamilyAttributesUpdate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->productsDataModel->productsFamilyAttributesUpdate(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsFamilyVariantsList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->productsDataModel->productsFamilyVariantsList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsFamilyVariantsCreate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->productsDataModel->productsFamilyVariantsCreate(
            "clothing_by_colour_size",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsFamilyVariantsDelete(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->productsDataModel->productsFamilyVariantsDelete(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsFamilyVariantsGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->productsDataModel->productsFamilyVariantsGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsFamilyVariantsUpdate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->productsDataModel->productsFamilyVariantsUpdate(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsMeasurementFamiliesList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->productsDataModel->productsMeasurementFamiliesList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsMeasurementFamiliesCreate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->productsDataModel->productsMeasurementFamiliesCreate(
            "weight",
            "kilogram"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsMeasurementFamiliesDelete(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->productsDataModel->productsMeasurementFamiliesDelete(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsMeasurementFamiliesGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->productsDataModel->productsMeasurementFamiliesGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsMeasurementFamiliesUpdate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->productsDataModel->productsMeasurementFamiliesUpdate(
            ""
        );

        $this->assertSame($data, $response);
    }

}
