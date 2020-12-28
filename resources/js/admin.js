import EditorJS from '@editorjs/editorjs';
import Header from '@editorjs/header';
import Link from '@editorjs/link';
import List from '@editorjs/list';
import ImageTool from '@editorjs/image';
import CheckList from '@editorjs/checklist';
import Table from '@editorjs/table';

const editor = new EditorJS({
    holder: 'editorjs',
    tools: {
        header: Header,
        linkTool: Link,
        list: List,
        image: {
            class: ImageTool,
            config: {
                endpoints: {
                    byFile: 'http://localhost/admin/upload-custom'
                }
            }
        },
        checklist: CheckList,
        table: Table
    }
});

let json = []

document.querySelector('.save_editor').addEventListener('click', () => {
    event.preventDefault()
    console.log(editor.save())
})
