<template>
    <div>
        <h1 style="color:#fff; padding: 40px;text-align:center;">Stock Allocation</h1>
        <div class="col-twelve" style="background-color: #fff">
            <div class="col-six" >
                <h4>Yo ! We go live search Here</h4>
                <p>Search using author names only....</p>
            </div>
            <div class="col-six"  style="background-color: #fff" >
                <h4>Total Number of Books</h4>
                <p>{{book.length}}</p>
            </div>
        </div>

         <div class="col-twelve tab-full right footer-subscribe" style="background-color: #fff">
            <div class="subscribe-form">
                <div id="mc-form" class="group" >
                    <input type="text" @keyup="fetchData()" v-model="search" name="search" placeholder="Search keyword" >
                </div>
            </div>
        </div>
        
        <div class="col-twelve" style="background-color: #fff">
            <div class="table-responsive">
                <table>
                    <thead>
                    <tr>
                        <th>S/N</th>
                        <th>Book title</th>
                        <th>Name of author</th>
                        <th>Category</th>
                        <th>Year of publication</th>
                        <th>Isbn</th>
                        <th>Status</th>
                    </tr>
                    </thead>
                    <tbody >
                        <tr v-bind:key="books.id" v-for="(books,index) in book">
                            <td>{{index + 1}}</td>
                            <td>{{books.title}}</td>
                            <td>{{books.author}}</td>
                            <td>{{books.category}}</td>
                            <td>{{books.year}}</td>
                            <td>{{books.isbn}}</td>
                            <td>{{books.status}}</td>
                            
                        </tr>
                    </tbody>
                </table>
            </div>
        </div> 
    </div> 
</template>
<style>
input{
  color:#000;   
}
</style>


<script>
import axios from 'axios'
export default {
    data(){
        return {
            book:[],
            search: '',
        }
    },
    created(){
        this.fetchData();
    },
    methods:{
        fetchData(){
                axios.get('api/books?search='+ this.search).then(response=>{
                this.book = response.data
            })
        }
    }
}
</script>