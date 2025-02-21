<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('delivery_requests', function (Blueprint $table) {
            $table->id();
            $table->string('pickup_address');
            $table->string('pickup_name');
            $table->string('pickup_contact_no');
            $table->string('pickup_email')->nullable();
            $table->string('delivery_address')->nullable();
            $table->string('delivery_name');
            $table->string('delivery_contact_no');
            $table->string('delivery_email')->nullable();
            $table->enum('type_of_goods', ['Document', 'Parcel'])->nullable();
            $table->enum('delivery_provider', ['DHL', 'STARTRACK', 'ZOOM2U', 'TGG'])->nullable();
            $table->enum('priority', ['Standard', 'Express', 'Immediate'])->nullable();
            $table->date('shipment_pickup_date');
            $table->time('shipment_pickup_time');
            $table->string('package_description');
            $table->decimal('length', 8, 2);
            $table->decimal('height', 8, 2);
            $table->decimal('width', 8, 2);
            $table->decimal('weight', 8, 2);
            $table->timestamps();
            $table->string('status');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('delivery_requests');
    }
};
