   $table->date('departure_date')->nullable();
            $table->time('departure_time')->nullable();
            $table->date('return_date')->nullable();
            $table->time('return_time')->nullable();
            
            $table->foreign('trip_id')
                ->references('leg_id')->on('trips')
                ->onDelete('cascade');
