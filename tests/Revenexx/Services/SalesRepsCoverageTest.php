<?php

namespace Revenexx\Services;

use Revenexx\Client;
use Revenexx\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;
use Revenexx\Enums\Tone;
use Revenexx\Enums\SalesRepsVocabulariesGetName;

final class SalesRepsCoverageTest extends TestCase {
    private $client;
    private $salesRepsCoverage;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->salesRepsCoverage = new SalesRepsCoverage($this->client);
    }

    public function testMethodSalesRepsAssignmentRolesList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->salesRepsCoverage->salesRepsAssignmentRolesList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodSalesRepsAssignmentRolesCreate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->salesRepsCoverage->salesRepsAssignmentRolesCreate(
            "field_sales",
            "Field sales"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodSalesRepsAssignmentRolesDefaults(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->salesRepsCoverage->salesRepsAssignmentRolesDefaults(
            array()
        );

        $this->assertSame($data, $response);
    }

    public function testMethodSalesRepsAssignmentRolesDelete(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->salesRepsCoverage->salesRepsAssignmentRolesDelete(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodSalesRepsAssignmentRolesGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->salesRepsCoverage->salesRepsAssignmentRolesGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodSalesRepsAssignmentRolesUpdate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->salesRepsCoverage->salesRepsAssignmentRolesUpdate(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodSalesRepsAssignmentsList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->salesRepsCoverage->salesRepsAssignmentsList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodSalesRepsAssignmentsCreate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->salesRepsCoverage->salesRepsAssignmentsCreate(
            "",
            "VK-04711"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodSalesRepsAssignmentsDelete(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->salesRepsCoverage->salesRepsAssignmentsDelete(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodSalesRepsAssignmentsGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->salesRepsCoverage->salesRepsAssignmentsGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodSalesRepsAssignmentsUpdate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->salesRepsCoverage->salesRepsAssignmentsUpdate(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodSalesRepsAssignmentsMakePrimary(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->salesRepsCoverage->salesRepsAssignmentsMakePrimary(
            "",
            array()
        );

        $this->assertSame($data, $response);
    }

    public function testMethodSalesRepsVocabulariesList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->salesRepsCoverage->salesRepsVocabulariesList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodSalesRepsVocabulariesGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->salesRepsCoverage->salesRepsVocabulariesGet(
            SalesRepsVocabulariesGetName::ASSIGNMENTROLES()
        );

        $this->assertSame($data, $response);
    }

}
