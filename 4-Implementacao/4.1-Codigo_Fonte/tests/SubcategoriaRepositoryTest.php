<?php

use App\Models\Subcategoria;
use App\Repositories\SubcategoriaRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class SubcategoriaRepositoryTest extends TestCase
{
    use MakeSubcategoriaTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var SubcategoriaRepository
     */
    protected $subcategoriaRepo;

    public function setUp()
    {
        parent::setUp();
        $this->subcategoriaRepo = App::make(SubcategoriaRepository::class);
    }

    /**
     * @test create
     */
    public function testCreateSubcategoria()
    {
        $subcategoria = $this->fakeSubcategoriaData();
        $createdSubcategoria = $this->subcategoriaRepo->create($subcategoria);
        $createdSubcategoria = $createdSubcategoria->toArray();
        $this->assertArrayHasKey('id', $createdSubcategoria);
        $this->assertNotNull($createdSubcategoria['id'], 'Created Subcategoria must have id specified');
        $this->assertNotNull(Subcategoria::find($createdSubcategoria['id']), 'Subcategoria with given id must be in DB');
        $this->assertModelData($subcategoria, $createdSubcategoria);
    }

    /**
     * @test read
     */
    public function testReadSubcategoria()
    {
        $subcategoria = $this->makeSubcategoria();
        $dbSubcategoria = $this->subcategoriaRepo->find($subcategoria->id);
        $dbSubcategoria = $dbSubcategoria->toArray();
        $this->assertModelData($subcategoria->toArray(), $dbSubcategoria);
    }

    /**
     * @test update
     */
    public function testUpdateSubcategoria()
    {
        $subcategoria = $this->makeSubcategoria();
        $fakeSubcategoria = $this->fakeSubcategoriaData();
        $updatedSubcategoria = $this->subcategoriaRepo->update($fakeSubcategoria, $subcategoria->id);
        $this->assertModelData($fakeSubcategoria, $updatedSubcategoria->toArray());
        $dbSubcategoria = $this->subcategoriaRepo->find($subcategoria->id);
        $this->assertModelData($fakeSubcategoria, $dbSubcategoria->toArray());
    }

    /**
     * @test delete
     */
    public function testDeleteSubcategoria()
    {
        $subcategoria = $this->makeSubcategoria();
        $resp = $this->subcategoriaRepo->delete($subcategoria->id);
        $this->assertTrue($resp);
        $this->assertNull(Subcategoria::find($subcategoria->id), 'Subcategoria should not exist in DB');
    }
}
